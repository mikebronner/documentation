---
extends: _layouts.post
section: content
title: When PostgreSQL Table Sequences Get Out Of Sync
date: 2019-06-29
description: Fix out-of-sync Postgres primary key sequences.
categories: [troubleshooting]
featured: true
---

It will often happen that Postgres table sequences get out of sync when you import or restore data. The following query will fix this problem for all tables:

```sql
DO $$
DECLARE
    rec RECORD;
    LAST_ID integer;
    schemaName archer(255);
BEGIN
    SET schemaName = 'public';
    FOR rec IN
    SELECT
        table_name
    FROM
        information_schema.columns
    WHERE
        table_schema = schemaName
        AND column_name = 'id'
        AND data_type IN ('integer', 'int8')
        LOOP
            EXECUTE 'SELECT (id + 1) as id FROM ' || schemaName || '.' || rec.table_name || ' ORDER BY id DESC LIMIT 1' INTO LAST_ID;
            EXECUTE 'SELECT SETVAL(''' || rec.table_name || '_id_seq''::regclass, ' || LAST_ID || ');';
        END LOOP;
END;
$$
```

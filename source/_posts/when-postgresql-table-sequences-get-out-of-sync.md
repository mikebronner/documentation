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
BEGIN
    FOR rec IN
        SELECT tc.table_schema,
            tc.table_name,
            ccu.column_name,
            c.data_type
        FROM information_schema.table_constraints tc 
        JOIN information_schema.constraint_column_usage AS ccu
            USING (constraint_schema, constraint_name) 
        JOIN information_schema.columns AS c
            ON c.table_schema = tc.constraint_schema
            AND tc.table_name = c.table_name
            AND ccu.column_name = c.column_name
        WHERE constraint_type = 'PRIMARY KEY'
            AND data_type IN ('integer', 'bigint')
    LOOP
        EXECUTE 'SELECT (' || rec.column_name || ' + 1) as ' || rec.column_name || ' FROM ' || rec.table_schema || '.' || rec.table_name || ' ORDER BY ' || rec.column_name || ' DESC LIMIT 1' INTO LAST_ID;
        IF LAST_ID IS NULL THEN
            LAST_ID = 1;
        END IF;
        EXECUTE 'SELECT SETVAL(''' || rec.table_name || '_' || rec.column_name || '_seq''::regclass, ' || LAST_ID || ');';
    END LOOP;
END;
$$
```

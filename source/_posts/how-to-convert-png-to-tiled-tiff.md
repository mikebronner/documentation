---
extends: _layouts.post
section: content
title: How To Convert PNG To Tiled TIFF
date: 2019-05-25
description: How to created tiled tiffs for use with geoservers.
categories: [misc]
featured: true
---

## Install ImageMagick on macOS
```sh
brew install imagemagick
```

## Use ImageMagick (convert) command
```sh
convert myAwesome.png -define tiff:tile-geometry=256x256 -depth 8 ptif:myAwesome.tif
```

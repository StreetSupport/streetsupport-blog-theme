#!/bin/bash

# If there are any errors, fail Travis
set -e

echo "*** Beginning Deployment ***"

# gulp deploy

mkdir _dist

for f in *.php
do
  cp $f _dist/{$f}
done

for f in *.css
do
  cp $f _dist/{$f}
done

cd _dist
ls

cd ../

echo "*** Finished Deployment ***"
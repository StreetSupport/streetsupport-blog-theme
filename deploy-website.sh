#!/bin/bash

# If there are any errors, fail Travis
set -e

echo "*** Beginning Deployment ***"

gulp deploy

echo "*** Finished Deployment ***"
#!/bin/bash

./private/bin/build_changes.sh

echo "Installing cypress"
yarn cypress install

echo "Starting WP-Cypress"
yarn wp-cypress start

#tail -100 ./node_modules/@bigbite/wp-cypress/debug.log
## background your server
yarn start

## poll the server over and over again
## until it's been booted
wait-on http://localhost:8080

echo "Running WP-Cypress"
yarn cypress run --browser chrome
# ./node_modules/cypress/bin/cypress run

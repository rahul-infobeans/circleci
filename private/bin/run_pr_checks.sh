#!/bin/bash

./private/bin/build_changes.sh

#npm start
npm install --save-dev start-server-and-test
echo "Installing cypress"
yarn cypress install

echo "Starting WP-Cypress"
npx wp-cypress start

#tail -100 ./node_modules/@bigbite/wp-cypress/debug.log
## background your server

#npm install wait-on 

## poll the server over and over again
## until it's been booted
#yarn wait-on http-get://localhost



echo "Running WP-Cypress"
yarn cypress run
#./node_modules/cypress/bin/cypress run


#!/bin/bash

./private/bin/build_changes.sh

#npm start
npm install --save-dev start-server-and-test
echo "Installing cypress"
yarn cypress install --force

echo "Starting WP-Cypress"
yarn wp-cypress start

#tail -100 ./node_modules/@bigbite/wp-cypress/debug.log
## background your server

#npm install wait-on 

## poll the server over and over again
## until it's been booted
#yarn wait-on http-get://localhost



echo "Running WP-Cypress"
DEBUG=cypress:* yarn cypress run --browser chrome
#yarn cypress run --browser chrome
#DEBUG=cypress:* ./node_modules/.bin/cypress open
#DEBUG=cypress:* ./node_modules/cypress/bin/cypress run
#./node_modules/cypress/bin/cypress run


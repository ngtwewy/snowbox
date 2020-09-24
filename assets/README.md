
cd scss
node-sass --watch -r ./ -o  ../css/

browser-sync start --server --files "css/*.css, *.html, js/*.js"

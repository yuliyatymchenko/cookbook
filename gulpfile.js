const elixir = require('laravel-elixir');
require('laravel-elixir-webpack-official');

elixir(function(mix) {
    mix.less('all.less');
});
# Laravel Scout with the Elasticsearch Driver

## Description

This is a demo repository, belonging guide I wrote about using [Elasticsearch as a driver for Laravel Scout on MacOS](https://arievisser.com/blog/laravel-with-elasticsearch-on-mac/).

### Features

- Configuration of Laravel Scout.
- Integration of Laravel Scout with Elasticsearch, by using [matchish/laravel-scout-elasticsearch](https://github.com/matchish/laravel-scout-elasticsearch).
- A controller method that returns search results from a collection of users.

## Usage

The `users?search={query}` route will return a json result of users that fit the search criteria. 

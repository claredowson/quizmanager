# Quiz manager
Write an intro here if you want.

## Requirements

- PostgreSQL. Can be installed via the Homebrew package manager on a Mac with brew install postgres. More details at https://www.postgresql.org/.
- A local PHP server. Can be started with php -S localhost:8000 on a Mac.

## Database import

1. Open terminal.
2. Login to the PostgreSQL console with psql.
3. Type CREATE DATABASE claretest; and press <kbd>Enter</kbd>.
4. Type \q and press enter to exit the console.
5. Type psql claretest < dump.sql.

The site will now be visible at http://localhost:8000.
XMA Header Image
PostgreSQL
postgresql.org
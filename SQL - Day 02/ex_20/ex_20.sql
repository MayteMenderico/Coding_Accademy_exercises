SELECT  *
FROM movies
INTO OUTFILE '/tmp/movies.csv' 
FIELDS ENCLOSED BY '"' 
TERMINATED BY ';' 
ESCAPED BY '"' 
LINES TERMINATED BY '\r\n';

-- Export the content of the movie table with format CSV in a file in /tmp/movies.csv
select round( 
    avg( movies.min_duration )
    , 2 ) as 'Average duration'
from movies;
-- Write a query that displays the average duration of a movie rounded to 2 decimals. The column will be
-- named “Average duration”.
select 
title as 'Movie title',
datediff(NOW(), release_date) as 'Number of days passed',
release_date

from movies
where release_date IS NOT NULL
-- Write a query that displays for each movie their title and the number of days since they were released. The
-- release date must be defined. The columns will be named: “Movie title” and “Number of days passed”.
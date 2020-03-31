select count(*) as 'Number of movies', prod_year as 'Year of production'
from movies
where prod_year != 0
group by prod_year
order by prod_year desc;


-- Write a query that displays the number of produced movies per year. The year must not be 0. The result
-- has to be ordered by decreasing year of production. The columns will be named “Number of movies” and
-- “Year of production”.
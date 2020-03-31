select sum(prod_year) as 'Sum prod_year'
from (select prod_year from movies group by prod_year) as prod_years

-- Write a query that will sum the prod_year of all the movies in a column “Sum prod_year”. Each year must
-- be summed only once.
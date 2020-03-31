select LEFT(summary, 92) as 'Summaries'
from movies 
where 
id >= 42 and id <= 84 and id%2=1
-- Write a query that displays the first 92 characters of the summary for movies whose id is odd and between
-- 42 and 84. The column will be named “Summaries”.
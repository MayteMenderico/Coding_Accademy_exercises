select title as 'Title of the longest movie'
from movies
order by LENGTH(title) desc
limit 1;
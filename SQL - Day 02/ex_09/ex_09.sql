select title, min_duration, length(title)
from movies
order by length(title) desc, min_duration asc;

-- Write a query that displays the title and the min_duration of all the movies. The result has to be sorted by
-- descending length of title, and then sorted by ascending movie duration.
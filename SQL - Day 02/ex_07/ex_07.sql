select
title as 'Movie title'

from movies
where title >= 'O' and title < 'U'
order by title asc;

-- Write a query that displays the title of movies for which first letter of their title is between “O” and “T”
-- included. The whole list has to be sorted in alphabetical order. The column will be named “Movie title”.
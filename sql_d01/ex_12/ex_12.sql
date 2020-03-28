SELECT count(*) as 'Number of ‘western’ movies'
from movies
where
    movies.genre_id in ( select id from genres where name = 'western' ) and
    movies.producer_id in ( select id from producers where name in ( 'tartan movies' , 'lionsgate uk' ) )
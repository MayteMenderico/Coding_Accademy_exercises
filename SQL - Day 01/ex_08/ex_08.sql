SELECT title from movies where movies.genre_id in ( 
	SELECT genres.id from genres WHERE genres.name = 'action' OR genres.name = 'romance'
)
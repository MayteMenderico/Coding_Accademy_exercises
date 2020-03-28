select room_number as 'Room numbers', name as 'Room names'
from rooms
where seats > 0 AND
floor > 1



-- Write a query that displays the number of a room and its name, for the rooms that have more than 0 seats
-- and that are not on the first floor (First floor and not ground floor). The columns will be named “Room
-- numbers” and “Room names”.
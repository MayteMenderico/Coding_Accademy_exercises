SELECT REPLACE(email, 'machin.com','coding-academy.fr') as 'New email addresses'
from profiles
order by 1 desc;

-- Write a query that displays the email addresses of the members in the table profiles, replacing the string
-- “machin.com” by “coding-academy.fr”, the whole list will be sorted by reverse alphabetical order. The column
-- will be named “New email addresses
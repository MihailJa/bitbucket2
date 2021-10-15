SELECT * FROM books;

SELECT authors.first_name, authors.last_name, authors.patronymic FROM authors
JOIN book_authors ON authors.id=book_authors.id_author WHERE book_authors.id_book = ?;

SELECT * FROM authors;

SELECT SUM(price) FROM books JOIN book_authors ON books.id=book_authors.id_book
WHERE id_author = ?;

SELECT title FROM books JOIN book_authors ON books.id=book_authors.id_book
WHERE id_author IS NULL;
CREATE TABLE livros (id INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(30), autor VARCHAR(30), classificacao VARCHAR(10))

INSERT INTO livros (titulo, autor,classificacao) VALUES (
    'Alice no país das maravilhas', 'Charles Lutwidge Dodgson', 'infantil'),
('Diablo','Nate Kenyon','terror');

SELECT * FROM livros
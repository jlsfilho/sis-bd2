CREATE TABLE livros (id INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(30), autor VARCHAR(30),
classificacao VARCHAR(10), paginas INT NOT NULL)

INSERT INTO livros (titulo, autor,classificacao) VALUES (
    'Alice no país das maravilhas', 'Charles Lutwidge Dodgson', 'infantil', 198),
('Diablo','Nate Kenyon','terror', 245);

SELECT * FROM livros
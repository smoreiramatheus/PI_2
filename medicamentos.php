<?php
//CRUD - CREATE, READ, UPDATE and DELETE + metodos GET and SETTERS
class medicamentos
{

    private $id = 0;
    private $nome = null;
    private $status = null;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    private function connection(): \PDO
    {
        return new \PDO("mysql:host=localhost;dbname=db_recurso", "root", "");
    }

    public function create(): array
    {
        $con = $this->connection();
        $stmt = $con->prepare("INSERT INTO medicamentos VALUES (NULL, :_nome, :_status)");
        $stmt->bindValue(":_nome", $this->getNome(), \PDO::PARAM_STR);
        $stmt->bindValue(":_status", $this->getStatus(), \PDO::PARAM_STR);
        if ($stmt->execute()) {
            $this->setId($con->lastInsertId());
            return $this->read();
        }
        return [];
    }

    public function read(): array
    {
        $con = $this->connection();
        if ($this->getId() === 0) {
            $stmt = $con->prepare("SELECT * FROM medicamentos");
            if ($stmt->execute()) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }
        } else if ($this->getId() > 0) {
            $stmt = $con->prepare("SELECT * FROM medicamentos WHERE id = :_id");
            $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
            if ($stmt->execute()) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }
        }

        return [];
    }

    public function update(): array
    {
        $con = $this->connection();
        $stmt = $con->prepare("UPDATE medicamentos SET nome = :_nome, status = :_status WHERE id = :_id");
        $stmt->bindValue(":_nome", $this->getNome(), \PDO::PARAM_STR);
        $stmt->bindValue(":_status", $this->getStatus(), \PDO::PARAM_STR);
        $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $this->read();
        }
        return [];
    }

    public function delete(): array
    {
        $medicamentos = $this->read();
        $con = $this->connection();
        $stmt = $con->prepare("DELETE FROM medicamentos WHERE id = :_id");
        $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $medicamentos;
        }
        return [];
    }
}

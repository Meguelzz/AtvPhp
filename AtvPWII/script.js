class pessoa {
    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    falar() {
        return this.nome + " está falando";
    }
}

pessoa1 = new pessoa("Julio", 18);
console.log(pessoa1.falar());

class aluno extends pessoa {
    ra;
    matricula;

    constructor(nome, idade, ra, matricula) {
        super(nome, idade);
        this.ra = ra;
        this.matricula = matricula;
    }

    falar() {
        return this.nome + " está perguntando";
    }
}

pessoa2 = new aluno("Kaique", 16, 100, 10010);
console.log(pessoa2.falar());

class professor extends pessoa {
    rm;
    disciplina;

    constructor(nome, idade, rm, disciplina) {
        super(nome, idade);
        this.rm = rm;
        this.disciplina = disciplina;
    }

    falar() {
        return this.nome + " está dando aula";
    }
}

pessoa3 = new professor("Luiz", 38, 110, "Desenvolvimento de Sistemas");
console.log(pessoa3.falar());
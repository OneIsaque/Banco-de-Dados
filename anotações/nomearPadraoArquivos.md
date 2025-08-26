
<img alt="imagem gif Rengoko -Demon Slayer-, (https://www.icegif.com/wp-content/uploads/2022/05/icegif-1166.gif)" src="https://www.icegif.com/wp-content/uploads/2022/05/icegif-1166.gif" style="display: block; margin: 0 auto; width: 450px" ></img>

Nomes podem ser usados como valores iniciais (default) para facilitar a organização e evitar erros. Abaixo estão algumas práticas comuns e exemplos de como definir nomes padrão:

# 1. Nomes Padrão para Arquivos

* `config.json`: Arquivo de configuração.
* `data.csv`: Arquivo de dados em formato CSV.
* `log.txt`: Arquivo de log.
* `output.txt`: Arquivo de saída.
* `README.md`: Arquivo de documentação.
* `main.py`: Arquivo principal de execução.


# 2. Nomes Padrão para Pastas

* `data/`: Para armazenar dados.
* `logs/`: Para armazenar arquivos de log.
* `output/`: Para armazenar saídas geradas pelo programa.
* `config/`: Para arquivos de configuração.
* `src/`: Para o código-fonte do projeto.
* `tests/`: Para scripts de teste.


# 3. Exemplo de Código com Nomes Padrão
Aqui está um exemplo de como usar nomes padrão em Python para criar pastas e arquivos automaticamente: `import os`

## Nomes padrão para pastas e arquivos
```
DEFAULT_FOLDERS = ["data", "logs", "output", "config"]
DEFAULT_FILES = {
    "config/config.json": '{"setting": "default"}',
    "logs/log.txt": "Log file initialized.\n",
    "output/output.txt": "Output will be saved here.\n"
}

def create_default_structure():
    # Criar pastas padrão
    for folder in DEFAULT_FOLDERS:
        os.makedirs(folder, exist_ok=True)  # Cria a pasta se não existir

    # Criar arquivos padrão
    for file_path, content in DEFAULT_FILES.items():
        with open(file_path, "w") as file:
            file.write(content)  # Escreve o conteúdo padrão no arquivo

    print("Estrutura padrão criada com sucesso!")
if __name__ == "__main__":
    create_default_structure()
```


# 4. Explicação do Código

* `os.makedirs(folder, exist_ok=True)`: Cria as pastas, ignorando erros se já existirem.
* `DEFAULT_FILES`: Um dicionário que mapeia caminhos de arquivos para seus conteúdos padrão.
* `with open(file_path, "w")`: Cria ou sobrescreve o arquivo com o conteúdo especificado.


# 5. Estrutura Criada pelo Código
Após executar o script, a seguinte estrutura será criada no diretório atual:
```
.
├── config/
│   └── config.json
├── data/
├── logs/
│   └── log.txt
└── output/
    └── output.txt
```

# 6. Personalização
Você pode personalizar os nomes e conteúdos padrão conforme a necessidade do seu projeto. Por exemplo:

Para projetos de aprendizado de máquina, use `models/` para armazenar modelos treinados.
Para projetos web, use `static/ e templates/`.

import os
import time


saldo = 2000
saque = 0
cheque_especial = 639

senha_atual = 1234

def textoEscolhaOqueFazer():
    print("O que deseja fazer?")
    print("1 - Sacar")
    print("2 - Depositar")
    print("3 - Consultar saldo")
    print("4 - Sair")


def conta(saldo, saque, cheque_especial):
    print(f'''
            Banco XYZ
        Informações atuais sobre a conta:

        Saldo: R$ {saldo}
        Cheque Especial: R$ {cheque_especial}

''')



def forma_numero1(saldo, saque, cheque_especial):
    if conta_comum:
        if saldo >= saque:
            return "Saque realizado com sucesso!"
        elif saldo + cheque_especial >= saque:
            return "Saque realizado com cheque especial!"
        else:
            return "Não foi pssível realizar o saque. Saldo Insuficiente"
    elif conta_universitaria:
        if saldo >= saque:
            return "Saque realizado com sucesso!"
    elif saldo + cheque_especial >= saque:
        return "Saque realizado com cheque especial!"
    else:
        return "Não foi pssível realizar o saque. Saldo Insuficiente"



def forma_numero2(saldo, saque, cheque_especial):
    if conta_comum or conta_universitaria:
        if saldo >= saque:
            return "Saque realizado com sucesso!"
        elif saldo + cheque_especial >= saque:
            return "Saque realizado com cheque especial!"
        else:
            return "Não foi pssível realizar o saque. Saldo Insuficiente"



def forma_numero3(saldo, saque, cheque_especial):
#Aqui vamos usar o if ternario
    return "Saque realizado com sucesso!" if saldo >= saque else "Saque realizado com cheque especial!" if saldo + cheque_especial >= saque else "Não foi pssível realizar o saque. Saldo Insuficiente"

    #ainda vou ter que fazer uma saida modificada para essa forma_numero3, pois ela não pode sair assim, ela precisa saber qual tipo de conta está usando
    #exemplo: print(f"{status} ao realizar saque) //ou qualquer outra forma de saida
    #Ou seja, if em uma única linha


while True:
    while True:
        os.system("cls" if os.name == "nt" else "clear")
        entrada = int(input("Senha (4 dígitos): "))

        if not (isinstance(entrada, int) and len(str(entrada)) == 4):
            print("Senha inválida. Tente novamente.")
            time.sleep(3)
            continue
        else:
            senha = int(entrada)
            if senha != senha_atual:
                print("Senha incorreta. Tente novamente.")
                time.sleep(3)
                continue
            else:
                print("Senha válida. Acesso concedido.")
                time.sleep(3)
                break

    choose = int(input("Escolha o tipo de conta (1 - Conta Comum / 2 - Conta Universitária): "))

    match choose:
        case 1:
            conta_comum = True
            conta_universitaria = False
            print ("Forma 1: ", forma_numero1(saldo, saque, cheque_especial))
            os.system("cls" if os.name == "nt" else "clear")
            break
        case 2:
            conta_comum = False
            conta_universitaria = True
            os.system("cls" if os.name == "nt" else "clear")
            print ("Forma 2: ", forma_numero2(saldo, saque, cheque_especial))
            os.system("cls" if os.name == "nt" else "clear")
            break
        case _:
            print("Opção inválida. Por favor, escolha 1 ou 2.")
            time.sleep(3)
            os.system("cls" if os.name == "nt" else "clear")



    os.system("cls" if os.name == "nt" else "clear")

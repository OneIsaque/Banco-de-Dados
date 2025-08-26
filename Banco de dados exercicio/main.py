import os
import time
import config as con
saldo = 2000
saque = 0
cheque_especial = 639

con.entrada = int(input("Senha (4 dígitos): "))

time.sleep(2)
os.system("cls" if os.name == "nt" else "clear")
con.conta(saldo, saque, cheque_especial)

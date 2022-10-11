from cmath import log
import ssl
import psycopg2

# CONFIGURAÇÕES BANCO:
host = "localhost"
dbname = "grupo_superpao_banco_usuarios"
user = "postgres"
password = "senha"
sslmode = "allow"

# STRING CONEXÃO:
conn_string = f"host={host} user={user} dbname={dbname} password={password} sslmode={sslmode}"

conn = psycopg2.connect(conn_string)

print('Conectado!')

cursor = conn.cursor()

nome_tabela = "usuarios"

#--------------------------------------------------------------------

#insert para inserir os usuarios com esse codigo

# INSERT:
# login_usuario = "013"
# nome_usuario = "Teste2"
# unidades_validas = "014"
# filtro_setor = "comercial;controladoria"
# senha_usuario = "senha123"

# comando_sql = f"INSERT INTO {nome_tabela}(login_usuario, nome_usuario, unidades_validas, filtro_setor, senha_usuario) VALUES ('{login_usuario}', '{nome_usuario}', '{unidades_validas}', '{filtro_setor}', '{senha_usuario}')"

# cursor.execute(comando_sql)

# conn.commit()
# cursor.close()
# conn.close()

# print("Usuario adicionado com sucesso!")

# ----------------------------------------------------------------
# SELECT:

conn = psycopg2.connect(conn_string)
cursor = conn.cursor()

comando_sql = f"SELECT * FROM {nome_tabela}"
cursor.execute(comando_sql)

rows = cursor.fetchall()

for row in rows:
    print(row)

cursor.close()
conn.close()
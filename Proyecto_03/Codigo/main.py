from admin import Admin
from cliente import Cliente
from invitado import Invitado

# Lista de usuarios
usuarios = []

# Crear usuarios iniciales
admin = Admin("ludovico", "admin@gmail.com", 1)
cliente = Cliente("federica", "peluche@gmail.com", 100)
invitado = Invitado("junior", "peluche@gmail.com")

usuarios.append(admin)
usuarios.append(cliente)
usuarios.append(invitado)

# Menú interactivo
while True:
    print("\n--- MENÚ ---")
    print("1. Mostrar usuarios")
    print("2. Agregar usuario")
    print("3. Salir")

    opcion = input("Selecciona una opción: ")

    if opcion == "1":
        print("\n--- LISTA DE USUARIOS ---")
        for usuario in usuarios:
            usuario.saludar()
            usuario.mostrar_datos()
            usuario.acceso_sistema()
            print("------------------------")

    elif opcion == "2":
        tipo = input("Tipo (admin/cliente/invitado): ")
        nombre = input("Nombre: ")
        email = input("Email: ")

        if tipo == "admin":
            nivel = int(input("Nivel de acceso: "))
            usuarios.append(Admin(nombre, email, nivel))

        elif tipo == "cliente":
            puntos = int(input("Puntos: "))
            usuarios.append(Cliente(nombre, email, puntos))

        elif tipo == "invitado":
            usuarios.append(Invitado(nombre, email))

        else:
            print("Tipo no válido")

    elif opcion == "3":
        print("Saliendo...")
        break

    else:
        print("Opción incorrecta")
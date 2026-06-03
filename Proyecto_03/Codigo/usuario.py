class Usuario:
    def __init__(self, nombre, email):
        self.nombre = nombre
        self.email = self.validar_email(email)

    def validar_email(self, email):
        if "@" in email and "." in email:
            return email
        else:
            return "Email inválido"

    def mostrar_datos(self):
        print(f"Nombre: {self.nombre}")
        print(f"Email: {self.email}")

    def acceso_sistema(self):
        print("Acceso básico al sistema")

    def saludar(self):
        print(f"Hola, soy {self.nombre}")
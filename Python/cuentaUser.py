from cuenta import Cuenta

class CuentaUser(Cuenta):
    def __init__(self, id, name, document, email, password, number):
        super().__init__(id, name, document, email, password, number)

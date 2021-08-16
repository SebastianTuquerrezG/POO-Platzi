from cuenta import Cuenta
from uber_car import Uber_car

class CuentaDriver(Cuenta):
    carro = Uber_car("","")

    def __init__(self, id, name, document, email, password, number, carro):
        super().__init__(id, name, document, email, password, number)
        self.carro = carro

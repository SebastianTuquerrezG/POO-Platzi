from uber_car import Uber_car

class UberPool(Uber_car):
    marca = str
    modelo = str

    def __init__(self, license, driver, marca, modelo):
        super().__init__(license, driver)
        self.marca = marca
        self.modelo = modelo

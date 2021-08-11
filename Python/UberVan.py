from uber_car import Uber_car

class UberVan(Uber_car):
    typeCarAccepted = []
    material = []

    def __init__(self, license, driver, typeCarAccepted, material):
        super().__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.material = material

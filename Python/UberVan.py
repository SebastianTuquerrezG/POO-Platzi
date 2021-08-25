from uber_car import Uber_car

class UberVan(Uber_car):
    typeCarAccepted = []
    material = []

    def __init__(self, license, driver):
        super().__init__(license, driver)

    def setPasageros(self, pasageros):
        if pasageros == 6:
            self.setPassenger = pasageros
        else:
            print("You need yo assign 6 passengers")

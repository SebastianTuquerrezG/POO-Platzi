from cuenta import Cuenta

class Uber_car:
    id       = int
    license     = int
    driver = Cuenta("","")
    pasageros    = int
    placa = str

    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
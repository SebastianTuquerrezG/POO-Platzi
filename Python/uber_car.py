from cuenta import Cuenta

class Uber_car:
    __id       = int
    __license     = int
    __driver = Cuenta("","")
    __pasageros    = int
    __placa = str

    def __init__(self, __license, __driver):
        self.__license = __license
        self.__driver = __driver

    def setPasageros(self, __pasageros):
        if __pasageros == 4:
            self.setPassenger = __pasageros
        else:
            print("You need yo assign 4 passengers")
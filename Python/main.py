from uber_car import Uber_car
from cuenta import Cuenta

if __name__ == "__main__":
    print("Hola")

    uber_car = Uber_car("10027", Cuenta("Sebastian", "778010"))
    print(vars(uber_car))
    print(vars(uber_car.driver))
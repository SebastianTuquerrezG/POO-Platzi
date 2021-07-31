from uber_car import Uber_car

if __name__ == "__main__":
    print("Hola")
    uber_car = Uber_car()
    uber_car.license = "100778"
    uber_car.driver = "Sebastian"
    print(vars(uber_car))
from pagos import Pagos

class PagoCard(Pagos):
    number = int
    ccv = int
    date = str
    name = str

    def __init__(self, id, monto, number, ccv, date, name):
        super().__init__(id, monto)
        self.number = number
        self.ccv = ccv
        self.date = date
        self.name = name

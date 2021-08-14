from pagos import Pagos

class PagoPayPal(Pagos):
    email = str

    def __init__(self, id, monto, email):
        super().__init__(id, monto)
        self.email = email

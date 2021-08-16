class Cuenta:
    id       = int
    name     = str
    document = str
    email    = str
    password = str
    number   = str

    def __init__(self, id, name, document, email, password, number):
        self.id = id
        self.name = name
        self.document = document
        self.email = email
        self.password = password
        self.number = number
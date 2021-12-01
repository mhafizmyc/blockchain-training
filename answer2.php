class Account:
    def __init__(self, name, balance):
        self.id
        self.name
        self.balance

    def deposit(self, amount):
	self.balance += amount

    def withdraw(self, amount):
	self.balance -= amount

    def __str__(self):
        return f"{self.name}'s account. Balance: {self.balance}"
		
class DevAccount:
    def __init__(self, name, balance):
        self.id
        self.name
        self.balance

    def deposit(self, amount):
	self.balance += amount

    def withdraw(self, amount):
	self.balance -= amount
	
	def get_balance(self):
    return self._balance

    def __str__(self):
        return f"{self.name}'s account. Balance: {self.balance}"		
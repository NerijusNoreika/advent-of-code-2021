data = 'insert-data'

numbers = data.split(' ')
length = len(numbers)

inc = 0

for i in range(length - 1):
    if int(numbers[i]) < int(numbers[i+1]):
       inc += 1 

print(inc)
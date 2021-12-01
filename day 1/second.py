data = 'insert-data'

numbers = data.split(' ')
length = len(numbers)

inc = 0

for i in range(length - 3):
    firstWindow = int(numbers[i]) + int(numbers[i+1]) + int(numbers[i+2])
    secondWindow  = int(numbers[i+1]) + int(numbers[i+2]) + int(numbers[i+3])
    if secondWindow > firstWindow:
       inc += 1 

print(inc)
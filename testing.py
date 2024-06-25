list = [4, 2, 3, 1, 5]


def quickSort(list):
    if len(list) <= 1:
        return list
    else:
        pivot = list[0]
        # pvot = 4

        less = [x for x in list[1:] if x <= pivot]
        # [2,3,1]
        greater = [x for x in list[1:] if x > pivot]
        # [5]
        return quickSort(less) + [pivot] + quickSort(greater)


print(quickSort(list))

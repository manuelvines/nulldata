
## BASI API Empleados y SKILLS

Ejecutar seeders previamente para agregar datos semilla de skills y jobs o posiciones

## ENPOINTS

#### EMPLEADOS
```http
GET api/v1/employees/
```
```http
POST api/v1/employees/
```

{
            "name" : "Manuel updating",
            "birth": "1990-10-23",
            "address": "CDMX, México",
            "latitud": "18780348",
            "longitud":"-4987609",
            "job_id": 1
}

** Consultar previo la lista de Jobs disponibles

```http
PUT api/v1/employees/1
```

{
          
            "name" : "Manuel updating",
            "birth": "1990-10-23",
            "address": "CDMX, México",
            "latitud": "18780348",
            "longitud":"-4987609",
            "job_id": 1
}

```http
DELETE api/v1/employees/{id}
```





#### JOBS

Empleos disponible

```http
GET         api/v1/jobs
```

Retorna una lista de empleos o puestos disponibles

```http
POST       api/v1/jobs/
```

{ 
  name : “Frontend”
}

Crear un nuevo empleo o puesto disponible


#### SKILLS

```http
 GET v1/skills 
```
retorna una lista de skills disponibles

```http
POST v1/skills
```

Permite agregar un nuevo skill 
{
  name:<string>
}




#### EMPLOYEESKILLS

Establece una relación entre empleado y skills asignando un score.

```http
POST v1/employeeskill
```

{
     ‘employee_id’ : <id>,
     ‘skill_id’    : <id>,
     ‘score’       : <1,2,3,4,5>
}

```http
GET http://localhost:8000/api/v1/employeeskill/{id}
```

Retorna los skills y score por empleado dado en el id

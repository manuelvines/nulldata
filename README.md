ENPOINTS

EMPLEADOS
GET api/v1/employees/

POST api/v1/employees/
{
            "name" : "Manuel updating",
            "birth": "1990-10-23",
            "address": "CDMX, México",
            "latitud": "18780348",
            "longitud":"-4987609",
            "job_id": 1
}

** Consultar lista de Jobs disponibles

PUT api/v1/employees/1
{
          
            "name" : "Manuel updating",
            "birth": "1990-10-23",
            "address": "CDMX, México",
            "latitud": "18780348",
            "longitud":"-4987609",
            "job_id": 1
}


DELETE api/v1/employees/{id}






JOBS
Empleos disponible

GET         api/v1/jobs
Retorna una lista de empleos o puestos disponibles

POST       api/v1/jobs/
{ 
  name : “Frontend”
}
Crear un nuevo empleo o puesto disponible


SKILLS

GET v1/skills 
retorna una lista de skills disponibles

POST v1/skills
Permite agregar un nuevo skill 
{
  name:<string>
}




EMPLOYEESKILLS
Establece una relación entre empleado y skills asignando un score.
POST v1/employeeskill
{
     ‘employee_id’ = <id>,
     ‘skill_id’           = <id>,
     ‘score’              = <1,2,3,4,5>
}


GET http://localhost:8000/api/v1/employeeskill/4
Retorna los skills y score por empleado

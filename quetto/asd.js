const Person = requiere('../models/person')


Person.findOne({ 'name.last': 'Ghost' }, 'name occupation', (err, person) => {
  if (err) return handleError(err);
  
  console.log('%s %s is a %s.', person.name.first, person.name.last,
    person.occupation);
});

Person.find({'name':'Agustin'})


Product.findOne({}, (err, result) => {
    if (err) throw err
    console.log(result)
    db.close()
  })

  req.body.name
  $_POST['name']
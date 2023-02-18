using System.ComponentModel.DataAnnotations;
namespace shelter.Models
{
    public class Org
    {
        [Key]
        public int Id { get; set; }
        public string ProfilePictureURL { get; set; }
        public string ProfilePictureName { get; set;}
        public string Description { get; set;}

    }
}
